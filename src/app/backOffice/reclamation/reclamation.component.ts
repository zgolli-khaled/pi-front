import { Component } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { MatDialog } from '@angular/material/dialog';
import {RecDialogComponent} from "../rec-dialog/rec-dialog.component";


@Component({
  selector: 'app-reclamation',
  templateUrl: './reclamation.component.html',
  styleUrls: ['./reclamation.component.css']
})
export class ReclamationComponent {
  objet: string = '';
  description: string = '';

  constructor(private http: HttpClient, private dialog: MatDialog) { }

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

  openDialog() {
    const dialogRef = this.dialog.open(RecDialogComponent);
  }
}
