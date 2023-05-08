import { Component, OnInit } from '@angular/core';
import { AuthService } from '../../_services/auth.service';
import { TokenStorageService } from '../../_services/token-storage.service';

import { UserService } from 'src/app/_services/user.service';
import { Router } from '@angular/router';



const USER_KEY = 'auth-user';
@Component({
  selector: 'app-register',
  templateUrl: './register.component.html',
  styleUrls: ['./register.component.css']
})
export class RegisterComponent implements OnInit {
  selectedRoles: string[] = [];
  
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

  onChangeCategory(event: any, role: any) {
		this.selectedRoles.push(role.value);
    console.log(this.selectedRoles);
	}
  user_roles: any = [
    { name:'PATIENT', value:'PATIENT', selected: false },
    //{ name:'ADMIN', value:'ROLE_ADMIN', selected: false },
    { name:'MEDECIEN', value:'MEDECIN', selected: false },

  ]
  constructor(private authService: AuthService, private tokenStorage: TokenStorageService,private router: Router) { }
  
  onSubmit(): void {
    const { username, email, password, nom, address, numero, cin, prenom, birthday,age,} = this.form;
    const selectedRoles = this.selectedRoles ;
    this.authService.register(username, email, password, nom, address, numero, cin, prenom, birthday,age,selectedRoles).subscribe({
      next: data => {
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
