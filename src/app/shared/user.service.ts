import { HttpClient } from '@angular/common/http';
import { Injectable } from '@angular/core';
import { User } from '../models/user.model';

@Injectable({
  providedIn: 'root'
})
export class UserService {


  apiURL = "http://localhost:8089/user";

  constructor(private _http: HttpClient) { }


  getAllUsers() {
    return this._http.get<User[]>(this.apiURL + "/all");
  }
  getUsers() {
    return this._http.get<User[]>(this.apiURL + "/all");
  }


}
