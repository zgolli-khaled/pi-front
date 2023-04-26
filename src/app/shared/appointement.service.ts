import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Observable } from 'rxjs';
import { Appointment } from '../models/appointment.model';


@Injectable({
  providedIn: 'root'
})
export class AppointementService {

  apiURL = "http://localhost:8089/appointment";

  constructor(private _http: HttpClient) { }

  getappointment() {
    return this._http.get<Appointment[]>(this.apiURL + "/all");
  }

  addAppointment(app: Appointment) {
    return this._http.post<Appointment>(this.apiURL + "/add", app);
  }

  deleteAppointment(id: number) {
    return this._http.delete(this.apiURL + "/delete/" + id, { responseType: 'text' });
  }

  updateAppointment(app: Appointment) {
    return this._http.put<Appointment>(this.apiURL + "/update", app);
  }







}
