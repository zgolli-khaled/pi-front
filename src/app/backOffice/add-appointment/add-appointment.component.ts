import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { Appointment } from 'src/app/models/appointment.model';
import { AppointementService } from 'src/app/shared/appointement.service';

@Component({
  selector: 'app-add-appointment',
  templateUrl: './add-appointment.component.html',
  styleUrls: ['./add-appointment.component.css']
})
export class AddAppointmentComponent implements OnInit {

  appointment : Appointment = new Appointment(); 


  constructor(private app:AppointementService, private _router:Router) { }

  ngOnInit(): void {

  }

  addApp(){
    console.log(this.appointment);
    
    this.appointment.user={
      "idUser": 2,
            "nom": "tst2",
            "prenom": "test2",
            "numero": "123456",
            "birthday": "2023-00-04",
            "address": "test2",
            "age": 10,
            "cin": "2335682",
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
    this.app.addAppointment(this.appointment).subscribe(()=>this._router.navigateByUrl("/appointments"));
   }


}
