import { Component, OnInit } from '@angular/core';
import { TokenStorageService } from 'src/app/_services/token-storage.service';
import { UserService } from 'src/app/shared/user.service';
import { Appointment } from 'src/app/models/appointment.model';
import { User } from 'src/app/models/user.model';
import { AppointementService } from 'src/app/shared/appointement.service';

@Component({
  selector: 'app-delete-app',
  templateUrl: './delete-app.component.html',
  styleUrls: ['./delete-app.component.css']
})
export class DeleteAppComponent implements OnInit {


  appData !: Appointment[];
  idApp !: number;

  constructor(private appService: AppointementService ,private userService: UserService,private tokenStorage: TokenStorageService) { }

  getidapp(id: number) {
    this.idApp = id;



  }
  deleteApp() {
    this.appService.deleteAppointment(this.idApp).subscribe(() => {
      this.appService.getappointment().subscribe((data) => {
        console.log(data);



        this.appData = data.filter((d) => {


          return d.user.idUser == this.user.idUser

        })

      })

    })
  }

  user !: User;

  ngOnInit(): void {

    this.userService.getUserByMail(this.tokenStorage.getUser().email).subscribe((data)=>{

      this.user=data;

      console.log(data);
      
    })


    this.appService.getappointment().subscribe((data) => {
      console.log(data);



      this.appData = data.filter((d) => {


        return d.user.idUser == this.user.idUser

      })

    })





  }



}
