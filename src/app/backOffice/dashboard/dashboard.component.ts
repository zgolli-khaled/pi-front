import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-dashboard',
  templateUrl: './dashboard.component.html',
  styleUrls: ['./dashboard.component.css']
})
export class DashboardComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {
    this.loadJsFile("assets/back/vendor/jquery/jquery.min.js");
    this.loadJsFile("assets/back/vendor/bootstrap/js/bootstrap.bundle.min.js");

    this.loadJsFile("assets/back/vendor/jquery-easing/jquery.easing.min.js");



  
    this.loadJsFile("assets/back/js/sb-admin-2.min.js");


    this.loadJsFile("assets/back/vendor/chart.js/Chart.min.js");

    this.loadJsFile("assets/back/js/demo/chart-area-demo.js");

    this.loadJsFile("assets/back/js/demo/chart-pie-demo.js");
   

    

    

    
    
  }

  public loadJsFile(url : string) {  
    let node = document.createElement('script');  
    node.src = url;  
    node.type = 'text/javascript';  
    document.getElementsByTagName('head')[0].appendChild(node);  
  }  

}
