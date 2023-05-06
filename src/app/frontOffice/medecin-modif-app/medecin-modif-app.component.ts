import { Component, OnInit } from '@angular/core';
import { Appointment } from 'src/app/models/appointment.model';
import { AppointementService } from 'src/app/shared/appointement.service';

@Component({
  selector: 'app-medecin-modif-app',
  templateUrl: './medecin-modif-app.component.html',
  styleUrls: ['./medecin-modif-app.component.css']
})
export class MedecinModifAppComponent implements OnInit {
  appData !: Appointment[];

  app !: any;

  selectedVlue !: any;

  sub(){
    console.log(this.selectedVlue);
    this.app.state=this.selectedVlue;

    this.appService.updateAppointment(this.app).subscribe(()=>{
  
      
    })
   
    
    
  }

  constructor(private appService: AppointementService) { }

  getAppData(data :Appointment){
  this.app=data;
    
  }

  ChangingValue(ev:any){
    
    
    
    
  }

  ngOnInit(): void {

    
    this.appService.getappointment().subscribe((data) => {
      this.appData=data;

      


    });
  }

}
