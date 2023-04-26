import { Component, OnInit } from '@angular/core';
import { Appointment } from 'src/app/models/appointment.model';
import { AppointementService } from 'src/app/shared/appointement.service';

@Component({
  selector: 'app-doctors-table',
  templateUrl: './doctors-table.component.html',
  styleUrls: ['./doctors-table.component.css']
})
export class DoctorsTableComponent implements OnInit {

  appointment: Appointment = new Appointment();

  constructor(private appointementService: AppointementService) {

  }

  datasApp !: Appointment[];

  idDelete !: number;

  appUpdate !: Appointment;


  getAppUpdate(app: Appointment) {
    this.appUpdate = app;
    this.appointment = app;



  }



  AppointmentUpdate() {
    this.appointment.user = {
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

    console.log(this.appointment);
    this.appointementService.updateAppointment(this.appointment).subscribe(() => {



    });
  }



  showNotifDelete(id: number) {

    this.idDelete = id;

  }

  deleteApp() {


    this.appointementService.deleteAppointment(this.idDelete).subscribe(() => {
      this.appointementService.getappointment().subscribe((data) => {

        this.datasApp = data;




      });

    })
  }

  ngOnInit(): void {
    this.loadJsFile("assets/back/vendor/jquery/jquery.min.js");
    this.loadJsFile("assets/back/vendor/bootstrap/js/bootstrap.bundle.min.js");

    this.loadJsFile("assets/back/vendor/jquery-easing/jquery.easing.min.js");




    this.loadJsFile("assets/back/js/sb-admin-2.min.js");
    this.loadJsFile("/assets/back/js/demo/datatables-demo.js");


    this.appointementService.getappointment().subscribe((data) => {

      this.datasApp = data;

      console.log(this.datasApp);
      





    });

















  }

  public loadJsFile(url: string) {
    let node = document.createElement('script');
    node.src = url;
    node.type = 'text/javascript';
    document.getElementsByTagName('head')[0].appendChild(node);
  }

}
