import { Component, OnInit, ViewChild } from '@angular/core';
import Stepper from 'bs-stepper';
import { User } from 'src/app/models/user.model';
  import { UserService } from 'src/app/shared/user.service';
import interactionPlugin from '@fullcalendar/interaction'; // a plugin!

import { CalendarOptions } from '@fullcalendar/core'; // useful for typechecking
import dayGridPlugin from '@fullcalendar/daygrid';
import { FullCalendarComponent } from '@fullcalendar/angular';
import { AppointementService } from 'src/app/shared/appointement.service';
import { Appointment } from 'src/app/models/appointment.model';
import { Router } from '@angular/router';
import { TokenStorageService } from 'src/app/_services/token-storage.service';

@Component({
  selector: 'app-user-app',
  templateUrl: './user-app.component.html',
  styleUrls: ['./user-app.component.css']
})
export class UserAppComponent implements OnInit {

  appointment: Appointment = new Appointment();

  datereset !: any;
  resetDate() {
    this.datereset = '';
    this.selectVlaues = null;
  }


  selectValue !: any;

  getSelectedValue(event: any) {

    // Prints selected value
    this.selectValue = event.target.value;

    console.log(this.selectValue);

  }

  selectVlaues: any = null;
  selectOptions: any = ['09:00:00', '10:00:00', '11:00:00', '14:00:00', '15:00:00', '16:00:00']

  selectFilterOptions: any = [];

  medecinValue !: any;

  agendaData !: any;


  onKey(event: any) {

    const inputValue = event.target.value;

    this.datereset = inputValue;


    this.selectOptions = ['09:00:00', '10:00:00', '11:00:00', '14:00:00', '15:00:00', '16:00:00']
    this.selectFilterOptions = ['09:00:00', '10:00:00', '11:00:00', '14:00:00', '15:00:00', '16:00:00']







    this.dataApp.filter((obj) => {


      let a = new Date(obj.dateApp);
      let b = new Date(inputValue);
      const yearOBJ = a.getFullYear();
      const monthOBJ = a.getMonth();
      const dayOBJ = a.getDate();

      const yearINPUT = b.getFullYear();
      const monthINPUT = b.getMonth();
      const dayINPUT = b.getDate();

      const aa: any = [];

      // console.log(obj.cin);
      // console.log(this.medecinValue.cin);


      if (yearINPUT == yearOBJ && monthOBJ == monthINPUT && dayINPUT == dayOBJ && this.medecinValue.cin == obj.cin) {
        //  console.log(obj.cin);

        this.selectFilterOptions = this.selectOptions.filter((f: any) => {

          return obj.heureDebut != f;

        })
        this.selectOptions = this.selectFilterOptions;

        console.log(this.selectFilterOptions);

      }









    })

    this.selectVlaues = true;

  }

  events: any = [


  ];

  calendarOptions: CalendarOptions = {
    initialView: 'dayGridMonth',
    plugins: [dayGridPlugin, interactionPlugin],
    height: 'auto',
    events: this.events,
    eventClick: this.handleDateClick.bind(this),

  };

  handleDateClick(arg: any) {
    console.log(arg);
    

   

  }






  getSpecialiteValue(nom: String) {



    this.usersFilter = this.dataUsers.filter((d) => {
      return d.specialite == nom;

    })




  }

  specialite1: any = [];
  specialite2: any = [];

  constructor(private userService: UserService, private appService: AppointementService, private _router: Router ,private tokenStorage: TokenStorageService) { }
  name = 'Angular';
  private stepper !: Stepper;

  dataUsers !: User[];

  dataApp !: Appointment[];

  usersFilter !: User[];

  next() {
    this.stepper.next();

  }

  submitAPP() {
    this.appointment.heureDebut = this.selectValue;
    this.events = [];



    const dd = new Date(this.appointment.dateApp);

    dd.setDate(dd.getDate());
    const datestring = dd;

    console.log(datestring);

    //this.appointment.dateApp = datestring.substring(0,9);




    //   const year = this.appointment.dateApp.getFullYear();
    //   const month = this.appointment.dateApp.getMonth() ;
    //   const day = this.appointment.dateApp.getDate() +1;

    //   this.appointment.dateApp=new Date(year, month , day);

    this.appointment.user = this.user;
    this.appointment.cin = this.medecinValue.cin;

    this.appointment.state="PENDING"


    this.appService.addAppointment(this.appointment).subscribe(() => {

      this.appService.getappointment().subscribe((data) => {

        //   console.log(data);
        this.selectVlaues = null;

        this.dataApp = data;


        this.selectFilterOptions = []



        // console.log(this.selectFilterOptions);

        this.agendaData = this.dataApp.filter((data) => {
          if (data.cin == this.medecinValue.cin && data.state=="ACCEPTED") {
            //  console.log("hello");sds

            const ev = {


              title: data.heureDebut,
              date: data.dateApp,
              color: '#FF0000'

            }

            this.events.push(ev);

            this.calendarOptions = {
              initialView: 'dayGridMonth',
              plugins: [dayGridPlugin, interactionPlugin],
              height: 'auto',
              events: this.events,
              dateClick: this.handleDateClick.bind(this),

            };

            setTimeout(() => {
              this.calendarOptions = {
                initialView: 'dayGridMonth',
                plugins: [dayGridPlugin, interactionPlugin],
                height: 'auto',

              };
            }, 500)


          }



        })


      });

    });







  }



  onSubmit() {
    return false;
  }


  resetevents() {
    this.events = [];

    console.log(this.events);
    console.log("fff");


  }

  medecin(u: User) {
    this.selectFilterOptions = ['09:00:00', '10:00:00', '11:00:00', '14:00:00', '15:00:00', '16:00:00']

    this.events = []
    /// console.log(u);
    //  console.log(this.dataApp);

console.log(this.dataApp);

    this.agendaData = this.dataApp.filter((data) => {

      if (data.cin == u.cin && data.state=='ACCEPTED') {
       

        const ev = {
          id: data.idApp,


          title: data.heureDebut,
          date: data.dateApp,
          color: '#FF0000'

        }

        this.events.push(ev);

      }



    })




    //  console.log(this.events);



    this.medecinValue = u;
    this.calendarOptions = {
      initialView: 'dayGridMonth',
      plugins: [dayGridPlugin, interactionPlugin],
      height: 'auto',
      events: this.events,
      dateClick: this.handleDateClick.bind(this),

    };

    setTimeout(() => {
      this.calendarOptions = {
        initialView: 'dayGridMonth',
        plugins: [dayGridPlugin, interactionPlugin],
        height: 'auto',

      };
    }, 100)
  }
  dateToday(): Date {
    const now = new Date();
    const year = now.getFullYear();
    const month = now.getMonth() + 1;
    const day = now.getDate();

    return new Date(year, month - 1, day);
  }
  todayDate !: Date;

  user !: User;

  ngOnInit(): void {

   

    this.userService.getUserByMail(this.tokenStorage.getUser().email).subscribe((data)=>{

      this.user=data;

      console.log(data);
      
    })

    this.todayDate = new Date();

    // get all users 



    this.userService.getUsers().subscribe((data) => {

      this.dataUsers = data;


    });

    this.appService.getappointment().subscribe((data) => {

      this.dataApp = data;


    });





    this.specialite1 = [{
      name: "Neurology",
      icon: "neurology.svg"
    },

    {
      name: "Eye care",
      icon: "eye-care.svg"
    },

    {
      name: "Cardiac care",
      icon: "cardiac.svg"
    }
    ]

    this.specialite2 = [{

      name: "Heart care",
      icon: "heart.svg"
    },
    {
      name: "Osteoporosis",
      icon: "osteoporosis.svg"
    },
    {
      name: "ENT",
      icon: "ent.svg"
    },
    ]


    const stepperElement = document.querySelector('#stepper1');

    if (stepperElement !== null) {
      this.stepper = new Stepper(stepperElement, {
        linear: false,
        animation: true
      })
    }
  }

}
