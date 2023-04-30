import { Component, OnInit } from '@angular/core';
import {HttpClient, HttpHeaders} from '@angular/common/http';
import Chart from 'chart.js/auto';
@Component({
  selector: 'app-display-reclam',
  templateUrl: './display-reclam.component.html',
  styleUrls: ['./display-reclam.component.css']
})
export class DisplayReclamComponent implements OnInit {
  reclamations!: any[];
  stats: any = [];

  constructor(private http: HttpClient) { }

  ngOnInit() {
    this.http.get<any[]>('http://localhost:8098/reclamation/displayreclamation').subscribe((res) => {
      this.reclamations = res;
    });
    /*************************************************************************************************************************/
    this.http.get<any[]>('http://localhost:8098/reclamation/statistiques').subscribe((res) => {
      this.stats = res;

      const data = {
        labels: ['Traitées', 'Encours', 'Non-traitée'],
        datasets: [{
          data: [this.stats['Nombre des reclamations traitées '].body, this.stats['Nombre des reclamations en cours de traitement'].body, this.stats['Nombre des reclamations non traitées'].body],
          backgroundColor: [
            'rgba(0,255,21,0.83)',
            'rgba(0,63,255,0.82)',
            'rgba(126,126,126,0.5)'
          ]
        }]
      };
      console.log(data);
      const options = {
        plugins: {
          legend: {
            display: false
          }
        },
        responsive: true,
        maintainAspectRatio: false
      };

      const ctx = document.getElementById('myChart') as HTMLCanvasElement;
      const myChart = new Chart(ctx, {
        type: 'polarArea',
        data: data,
        options: options
      });

    });

    /*************************************************************************************************************************/
  }

  getStatusColor(status: string): string {
    switch (status) {
      case 'traitée':
        return 'lightgreen';
      case 'encours':
        return 'lightgray';
      default:
        return 'none';
    }
  }

  deleteReclamation(reclamationId: number) {
    this.ngOnInit();
    this.http.delete(`http://localhost:8098/reclamation/deleteReclamation/${reclamationId}`).subscribe((res) => {
      console.log(`Reclamation with id ${reclamationId} deleted successfully`);
      this.reclamations = this.reclamations.filter((reclamation) => reclamation.id !== reclamationId);
      this.ngOnInit();
    });
  }

}
