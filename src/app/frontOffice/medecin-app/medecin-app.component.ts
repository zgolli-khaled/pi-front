import { Component, OnInit } from '@angular/core';
import { CalendarOptions } from '@fullcalendar/core';
import dayGridPlugin from '@fullcalendar/daygrid';
import interactionPlugin from '@fullcalendar/interaction'; // a plugin!
import { Appointment } from 'src/app/models/appointment.model';
import { AppointementService } from 'src/app/shared/appointement.service';

@Component({
  selector: 'app-medecin-app',
  templateUrl: './medecin-app.component.html',
  styleUrls: ['./medecin-app.component.css']
})
export class MedecinAppComponent implements OnInit {

  events: any = [


  ];
  calendarOptions: CalendarOptions = {
    initialView: 'dayGridMonth',
    plugins: [dayGridPlugin, interactionPlugin],
    height: 'auto',
    events: this.events,
  

  };
  constructor(private appService: AppointementService) { }

  dataApp !: Appointment[];
  user= {
    "idUser": 7,
      "nom": "tst2",
      "prenom": "test2",
      "numero": "5654654",
      "birthday": "2023-00-04",
      "address": "test2",
      "age": 10,
      "cin": "5654654",
      "specialite": "test2",
      "role": {
        "idRole": 1,
        "role": "MEDECIN"
      },
      "chambre": null,
      "pharmacie": null,
      "reclamations": [],
      "prescriptions": [],
      "payments": []
  }

  

  ngOnInit(): void {

    
    
    this.appService.getappointment().subscribe((data) => {

      this.dataApp=data.filter((d) => {
     
        

        if (d.cin == this.user.cin ) {

          if(d.state=="REFUSED"){
            const ev = {
              id: d.idApp,
    
    
              title: d.heureDebut,
              date: d.dateApp,
              color: '#FF0000'
    
            }
    
            this.events.push(ev);

          }else if(d.state=="ACCEPTED"){
            const ev = {
              id: d.idApp,
    
    
              title: d.heureDebut,
              date: d.dateApp,
              color: '#00FF00'
    
            }
    
            this.events.push(ev);
          }else{
            const ev = {
              id: d.idApp,
    
    
              title: d.heureDebut,
              date: d.dateApp,
              color: '#D0D300'
    
            }
    
            this.events.push(ev);
          }
         
  
         

        
          
  
        }
  
  
  
      })
      
      


    });

    console.log(this.events);
    


    setTimeout(() => {
      this.calendarOptions = {
        initialView: 'dayGridMonth',
        plugins: [dayGridPlugin, interactionPlugin],
        height: 'auto',

      };
    }, 200)

  }

}
