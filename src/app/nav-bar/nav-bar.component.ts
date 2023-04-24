import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-nav-bar',
  templateUrl: './nav-bar.component.html',
  styleUrls: ['./nav-bar.component.css']
})
export class NavBarComponent implements OnInit {

  constructor() { }

  ngOnInit(): void {

    this.loadJsFile("assets/front/vendors/bootstrap/bootstrap.min.js");
    this.loadJsFile("assets/front/vendors/is/is.min.js");
    this.loadJsFile("https://scripts.sirv.com/sirvjs/v3/sirv.js");
    this.loadJsFile("assets/front/vendors/@popperjs/popper.min.js");
    this.loadJsFile("assets/front/js/theme.js");
  }


  public loadJsFile(url : string) {  
    let node = document.createElement('script');  
    node.src = url;  
    node.type = 'text/javascript';  
    document.getElementsByTagName('head')[0].appendChild(node);  
  }  


}
