import { Component, OnInit } from '@angular/core';
import { Appointment } from 'src/app/models/appointment.model';
import { AppointementService } from 'src/app/shared/appointement.service';

@Component({
  selector: 'app-delete-app',
  templateUrl: './delete-app.component.html',
  styleUrls: ['./delete-app.component.css']
})
export class DeleteAppComponent implements OnInit {


  appData !: Appointment[];
  idApp !: number;

  constructor(private appService: AppointementService) { }

  getidapp(id: number) {
    this.idApp = id;



  }
  deleteApp() {
    this.appService.deleteAppointment(this.idApp).subscribe(() => {
      this.appService.getappointment().subscribe((data) => {
        console.log(data);



        this.appData = data.filter((d) => {


          return d.user.idUser == 7

        })

      })

    })
  }

  ngOnInit(): void {
    this.appService.getappointment().subscribe((data) => {
      console.log(data);



      this.appData = data.filter((d) => {


        return d.user.idUser == 7

      })

    })





  }



}
