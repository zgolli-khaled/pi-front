import { Component, OnInit } from '@angular/core';
import { AuthService } from '../../_services/auth.service';
import { TokenStorageService } from '../../_services/token-storage.service';

import { UserService } from 'src/app/_services/user.service';
import { Router } from '@angular/router';

import { MatSnackBar } from '@angular/material/snack-bar';



const USER_KEY = 'auth-user';
@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {
  selectedRoles: string[] = [];
  registring = false;
  
  form: any = {
    username: null,
    email: null,
    password: null,
    nom :null,    
    address:null,
    age:null,
    numero :null,
    cin:null,
    prenom:null,
    birthday:null,
    selectedRoles:[],
    
        
  };
  
  isSuccessful = false;
  isSignUpFailed = false;
  errorMessage = '';
  


  
  ngOnInit(): void {
    
  } 
  constructor(private authService: AuthService, private tokenStorage: TokenStorageService,private router: Router,private _snackBar: MatSnackBar) { }
  getLocation() {
    if (navigator.geolocation) {
      navigator.geolocation.getCurrentPosition(position => {
        this.form.address = position;
        console.log(position.coords.accuracy, position.coords.longitude);
        console.log(position);
      });
    } else {
      console.log('Geolocation is not supported by this browser.');
    }
    
    
  }
  
  openSuccessSnackBar(message: string) {
    this._snackBar.open(message, '', {
       duration: 4000,
       horizontalPosition:'center',
       verticalPosition:'bottom',
       panelClass:["snackbar-success-style"]
    });
  }

  onChangeCategory(event: any, role: any) {
		this.selectedRoles.push(role.value);
    console.log(this.selectedRoles);
	}
  user_roles: any = [
    { name:'PATIENT', value:'PATIENT', selected: false },
    //{ name:'ADMIN', value:'ROLE_ADMIN', selected: false },
    { name:'MEDECIEN', value:'MEDECIN', selected: false },

  ]
  
  
  onSubmit(): void {
    this.registring = true;
    const { username, email, password, nom, address, numero, cin, prenom, birthday,age,} = this.form;
    const selectedRoles = this.selectedRoles ;
    this.authService.register(username, email, password, nom, address, numero, cin, prenom, birthday,age,selectedRoles).subscribe({
      next: data => {
        this.openSuccessSnackBar('"accout created successfully" ');
        console.log(data);
        this.isSuccessful = true;
        this.isSignUpFailed = false;
        this.router.navigate(['/login']);
        
     
      },
      error: err => {
        this.errorMessage = err.error.message;
        this.isSignUpFailed = true;
      }
    });
  }
}
