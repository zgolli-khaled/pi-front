import { Component, OnInit } from '@angular/core';
import Stepper from 'bs-stepper';
import { User } from 'src/app/models/user.model';
import { UserService } from 'src/app/shared/user.service';
@Component({
  selector: 'app-user-app',
  templateUrl: './user-app.component.html',
  styleUrls: ['./user-app.component.css']
})
export class UserAppComponent implements OnInit {

  getSpecialiteValue(nom: String) {
    console.log(nom);

    this.usersFilter = this.dataUsers.filter((d) => {
      return d.specialite == nom;

    })

    
    

  }

  specialite1: any = [];
  specialite2: any = [];

  constructor(private userService: UserService) { }
  name = 'Angular';
  private stepper !: Stepper;

  dataUsers !: User[];

  usersFilter !: User[];

  next() {
    this.stepper.next();

  }



  onSubmit() {
    return false;
  }

  ngOnInit(): void {

    // get all users 



    this.userService.getUsers().subscribe((data) => {

      this.dataUsers = data;

      console.log(this.dataUsers);






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
