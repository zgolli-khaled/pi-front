import { Component } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';

@Component({
  selector: 'app-reclamation',
  templateUrl: './reclamation.component.html',
  styleUrls: ['./reclamation.component.css']
})
export class ReclamationComponent {
  objet: string = '';
  description: string = '';

  constructor(private http: HttpClient) { }

  submitReclamation() {
    const id = 1;
    const data = { objet: this.objet, description: this.description, id: id };
    const options = { headers: new HttpHeaders({ 'Content-Type': 'application/json' }) };
    this.http.post('http://localhost:8098/reclamation/createReclamation/' + id, data, options)
      .subscribe({
        next: (response) => {
          console.log('Reclamation created successfully:', response);
        },
        error: (error) => {
          console.log('Error creating reclamation:', error);
        }
      });
  }
}
