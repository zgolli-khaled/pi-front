import { Injectable } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { Observable } from 'rxjs';



const AUTH_API = 'http://localhost:8089/api/auth/';
const PASS_API = 'http://localhost:8089/api/pass/';

const httpOptions = {
  headers: new HttpHeaders({ 'Content-Type': 'application/json' })
};

@Injectable({
  providedIn: 'root'
})
export class AuthService {
  constructor(private http: HttpClient) { }

  login(username: string, password: string): Observable<any> {
    return this.http.post(AUTH_API + 'signin', {
      username,
      password
    }, httpOptions);
  }

  register(username: string, email: string, password: string , nom:string, cin: string,  numero:string, address:string ,  prenom :string,  birthday:Date, age: number,role:string[] ): Observable<any> {
    return this.http.post(AUTH_API + 'signup', {
      username, email, password, nom, address, numero, cin, prenom, birthday ,age,role
    }, httpOptions);
  }
  resetPassword(password: string): Observable<any> {
    return this.http.post(PASS_API + 'reset_password', password);
  }
  private apiUrl = 'http://localhost:8089/api/pass';

  

  forgotPassword(email: string): Observable<any> {
   
    return this.http.post(`${this.apiUrl}/forgot_password`, email);
  }
 
 /* edit(email: string,code:string, newpassword:string): Observable<any> {
    const body = { email, code, newpassword };
    return this.http.post(AUTH_API + 'edit', body);
  }*/
 
/*  resetPassword(token: string, password: string): Observable<void> {
    const body = {
      token,
      password
    };
    return this.http.post<void>(PASS_API+"reset_password", body);
  }*/
 /* forgotPassword(email: string,options: any) {
    const body = {
      email,
      options
      
    };
    return this.http.post(PASS_API+'forgot_password', body);
  }
  forgotPassworddd(email: string, token: string): Observable<any> {
    const headers = new HttpHeaders().set('Authorization', `Bearer ${token}`);
    return this.http.post(`${PASS_API}forgot_password`, { email }, { headers });
  }
  forgotPasswordhh(email: string, token: string, options: any) {
    const url = `${PASS_API}forgot_password`;
    const data = { email: email };
    return this.http.post(url, data, options);
  }*/
 /* forgotPasswordd(email: string): Observable<any> {
    return this.http.post(PASS_API + '/forgot_password', { email: email });
  }*/
 
  
}