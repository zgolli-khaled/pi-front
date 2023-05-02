import { Injectable } from '@angular/core';
import { HttpClient } from '@angular/common/http';
import { Chambre } from '../models/chambre.model';

@Injectable({
  providedIn: 'root'
})
export class ChambreService {
  apiURL = "http://localhost:8089/chambre";

  constructor(private _http: HttpClient) { }
  getChambre() {
    return this._http.get<Chambre[]>(this.apiURL + "/all");
  }

  addChambre(app: Chambre) {
    return this._http.post<Chambre>(this.apiURL + "/add", app);
  }

  deleteChambre(id: number) {
    return this._http.delete(this.apiURL + "/delete/" + id, { responseType: 'text' });
  }

  updateChambre(app: Chambre) {
    return this._http.put<Chambre>(this.apiURL + "/update", app);
  }
}
