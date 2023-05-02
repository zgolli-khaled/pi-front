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

@Component({
  selector: 'app-user-app',
  templateUrl: './user-app.component.html',
  styleUrls: ['./user-app.component.css']
})
export class UserAppComponent implements OnInit {
  selectVlaues: any = null;
  selectOptions: any = ['09:00', '10:00:00', '11:00:00', '14:00', '15:00', '16:00']

  selectFilterOptions : any =[];


  onKey(event: any) {
    const inputValue = event.target.value;

    this.selectOptions = ['09:00', '10:00:00', '11:00:00', '14:00', '15:00', '16:00']
    this.selectFilterOptions = ['09:00', '10:00:00', '11:00:00', '14:00', '15:00', '16:00']

    this.selectVlaues = true;

    this.dataApp.filter((obj)=>{
    let a =new Date(obj.dateApp);
    let b = new Date(inputValue);
      const yearOBJ = a.getFullYear();
      const monthOBJ = a.getMonth() ;
      const dayOBJ = a.getDate()+1;
       
      const yearINPUT = b.getFullYear();
      const monthINPUT = b.getMonth() ;
      const dayINPUT = b.getDate(); 

      const aa : any=[];
      
      if( yearINPUT == yearOBJ && monthOBJ ==  monthINPUT && dayINPUT ==  dayOBJ ){
        console.log(obj);
       
        this.selectFilterOptions=  this.selectOptions.filter((f :any)=>{
         
       return obj.heureDebut != f;
      
      })
      this.selectOptions=this.selectFilterOptions; 

      console.log(this.selectFilterOptions);
      
      }
      
      
       
      
 
      
        
      
      
    })



  }

  events: any = [
    { title: 'ssssssssssssss', date: '2023-05-03', color: '#FF0000' },
    { title: 'ssssssssssssss', date: '2023-05-03', color: '#FF0000' },
    { title: 'ssssssssssssss', date: '2023-05-03', color: '#FF0000' },
    { title: 'Complet', date: '2023-05-01', color: '#FF0000' },


  ];

  calendarOptions: CalendarOptions = {
    initialView: 'dayGridMonth',
    plugins: [dayGridPlugin, interactionPlugin],
    height: 'auto',
    events: this.events,
    dateClick: this.handleDateClick.bind(this),

  };

  handleDateClick(arg: any) {
    alert('date click! ' + arg.dateStr)

  }






  getSpecialiteValue(nom: String) {

   

    this.usersFilter = this.dataUsers.filter((d) => {
      return d.specialite == nom;

    })




  }

  specialite1: any = [];
  specialite2: any = [];

  constructor(private userService: UserService, private appService: AppointementService) { }
  name = 'Angular';
  private stepper !: Stepper;

  dataUsers !: User[];

  dataApp !: Appointment[];

  usersFilter !: User[];

  next() {
    this.stepper.next();

  }



  onSubmit() {
    return false;
  }


  medecin(u: User) {

    console.log(u);
    
 

    setTimeout(() => {
      this.calendarOptions = {
        initialView: 'dayGridMonth',
        plugins: [dayGridPlugin, interactionPlugin],
        height: 'auto',

      };
    }, 50)
  }
  dateToday(): Date {
    const now = new Date();
    const year = now.getFullYear();
    const month = now.getMonth() + 1;
    const day = now.getDate();

    return new Date(year, month - 1, day);
  }
  todayDate !: Date;

  ngOnInit(): void {

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
