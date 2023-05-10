import { Component } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { ActivatedRoute, Router } from '@angular/router';
import { MatSnackBar } from '@angular/material/snack-bar';

@Component({
  selector: 'app-reset-password',
  templateUrl: './reset-password.component.html',
  styleUrls: ['./reset-password.component.css']
})
export class ResetPasswordComponent {

  token!: string;
  password!: string;
  confirmPassword!: string;
  error!: string;
  message!: string;

  constructor(
    private http: HttpClient,
    private route: ActivatedRoute,
    private router: Router,private _snackBar: MatSnackBar
  ) {
    this.route.queryParams.subscribe(params => {
      this.token = params['token'];
    });
  }
  openSuccessSnackBar(message: string) {
    this._snackBar.open(message, '', {
       duration: 4000,
       horizontalPosition:'center',
       verticalPosition:'bottom',
       panelClass:["snackbar-success-style"]
    });
  }
  resetPassword() {
    if (this.password !== this.confirmPassword) {
      this.error = 'Passwords do not match';
      return;
    }

    this.http.post('http://localhost:8089/api/pass/reset_password', {
      token: this.token,
      password: this.password
    }).subscribe(
      response => {
        this.openSuccessSnackBar('"Password has been updated successfully" ');
        this.router.navigate(['/login']);
      },
      
    );
  }
}



