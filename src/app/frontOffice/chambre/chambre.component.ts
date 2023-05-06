import { Component, OnInit } from '@angular/core';
import { Router } from '@angular/router';
import { log } from 'console';
import { Chambre } from 'src/app/models/chambre.model';
import { User } from 'src/app/models/user.model';
import { ChambreService } from 'src/app/shared/chambre.service';
import { UserService } from 'src/app/shared/user.service';

@Component({
  selector: 'app-chambre',
  templateUrl: './chambre.component.html',
  styleUrls: ['./chambre.component.css']
})
export class ChambreComponent implements OnInit {

  chambre: Chambre = new Chambre();
  datachambres !: Chambre[];
  datausers !: User[];
  onclickUsers: any = [];

  chambreAff !: Chambre;


  affecteruser(user:User){
    this.chambreAff.user=user;

    console.log(user);
    this.chambreService.addChambre(this.chambreAff).subscribe(()=> {
      this.chambreService.getChambre().subscribe((data) => {

        this.datachambres = data;
  
       
  
      });
    }
    );
   
    
  }

  filterUsers(chambre: Chambre) {

   console.log(this.datausers);
   
    
    

    this.chambreAff=chambre;
    

    this.onclickUsers=[];
 
    

    if (chambre.user == null) {
      this.onclickUsers = this.datausers;
    } else {
      this.onclickUsers.push(chambre.user) ;
    
    }

  }


  constructor(private chambreService: ChambreService, private userService: UserService, private _router: Router) { }


  ngOnInit(): void {
    this.chambreService.getChambre().subscribe((data) => {

      this.datachambres = data;

     

    });

    this.userService.getAllUsers().subscribe((data: any) => {

      this.datausers = data;


    });

  }

}
