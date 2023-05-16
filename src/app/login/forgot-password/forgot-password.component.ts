import { Component, OnInit } from '@angular/core';
import { FormBuilder, FormGroup, Validators } from '@angular/forms';
import { Router } from '@angular/router';
import { AuthService } from 'src/app/_services/auth.service';
import { MatSnackBar } from '@angular/material/snack-bar';


@Component({
  selector: 'app-forgot-password',
  templateUrl: './forgot-password.component.html',
  styleUrls: ['./forgot-password.component.css']
})
export class ForgotPasswordComponent implements OnInit {
  sendingEmail = false;
  ngOnInit(): void {

  }

 
  message: string = '';
  error: string = '';
  form: any = {
    
  email: null,
  };
  
  
      

  constructor( private authService: AuthService,private _snackBar: MatSnackBar) { }

  openSuccessSnackBar(message: string) {
    this._snackBar.open(message, '', {
       duration: 4000,
       horizontalPosition:'center',
       verticalPosition:'bottom',
       panelClass:["snackbar-success-style"]
    });
  }
    

  onSubmit() {
    this.sendingEmail = true;
    const { email} = this.form;
    this.authService.forgotPassword(email).subscribe({
        next: data => {
          this.openSuccessSnackBar('We have sent a reset password link to your email. Please check. !');
          console.log(data);
          this.sendingEmail = false;
       
        },
        error: err => {
          
        }
      }
       
       
      );
      console.log(email);
  }

}
