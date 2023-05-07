import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { AuthService } from 'src/app/_services/auth.service';


@Component({
  selector: 'app-forgot-password',
  templateUrl: './forgot-password.component.html',
  styleUrls: ['./forgot-password.component.css']
})
export class ForgotPasswordComponent implements OnInit {
  ngOnInit(): void {

  }

 
  message: string = '';
  error: string = '';
  form: any = {
    
  email: null,
  };
    
        

  constructor( private authService: AuthService) { }

  onSubmit() {
    const { email} = this.form;
    this.authService.forgotPassword(email).subscribe({
        next: data => {
          console.log(data);
       
        },
        error: err => {
          
        }
      }
       
       
      );
      console.log(email);
  }

}
