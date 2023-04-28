import { Component, OnInit } from '@angular/core';
import { HttpClient } from '@angular/common/http';

@Component({
  selector: 'app-display-reclam',
  templateUrl: './display-reclam.component.html',
  styleUrls: ['./display-reclam.component.css']
})
export class DisplayReclamComponent implements OnInit {
  reclamations!: any[];

  constructor(private http: HttpClient) { }

  ngOnInit() {
    this.http.get<any[]>('http://localhost:8098/reclamation/displayreclamation').subscribe((res) => {
      this.reclamations = res;
    });
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
}
