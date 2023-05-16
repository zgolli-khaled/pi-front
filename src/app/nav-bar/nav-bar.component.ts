import { Component, OnInit } from '@angular/core';
import { TokenStorageService } from '../_services/token-storage.service';
import { User } from '../models/user.model';

@Component({
  selector: 'app-nav-bar',
  templateUrl: './nav-bar.component.html',
  styleUrls: ['./nav-bar.component.css']
})
export class NavBarComponent implements OnInit {

  constructor(private tokenStorage: TokenStorageService,) { }

  user : any =null;
  isLoggedIn = false;
  isLoginFailed = false;

  ngOnInit(): void {
    this.user=this.tokenStorage.getUser();
    if (this.tokenStorage.getToken()) {
      this.isLoggedIn = true;
     
      
    }

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

  logout(): void {
    this.tokenStorage.signOut();
    window.location.reload();
  }
}
