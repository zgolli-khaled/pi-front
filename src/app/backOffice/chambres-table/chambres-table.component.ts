import { Component, OnInit } from '@angular/core';
import { Chambre } from 'src/app/models/chambre.model';
import { ChambreService } from 'src/app/shared/chambre.service';
import { Router } from '@angular/router';
import { log } from 'console';

@Component({
  selector: 'app-chambres-table',
  templateUrl: './chambres-table.component.html',
  styleUrls: ['./chambres-table.component.css']
})
export class ChambresTableComponent implements OnInit {
  chambre: Chambre = new Chambre();
  constructor(private chambreService : ChambreService, private _router:Router) { }
  
  datasApp !: Chambre[];

  idDelete !: number;

  appUpdate !: Chambre;
  getAppUpdate(app: Chambre) {
    this.appUpdate = app;
    this.chambre = app;



  }
  ChambreUpdate() {
    

    this.chambreService.updateChambre(this.chambre).subscribe(() => {



    });
  }
  showNotifDelete(id: number) {

    this.idDelete = id;

  }
  deleteApp() {

    this.chambreService.deleteChambre(this.idDelete).subscribe(() => {
      this.chambreService.getChambre().subscribe((data) => {

        this.datasApp = data;

      });

    })
  }
  ngOnInit(): void {
    this.chambreService.getChambre().subscribe((data) => {

      this.datasApp = data;

      console.log(this.datasApp);
    
    });


  }
  addchambre(){
    
 
   
    this.chambreService.addChambre(this.chambre).subscribe(()=>this._router.navigateByUrl("/chambre"));
   }

}
