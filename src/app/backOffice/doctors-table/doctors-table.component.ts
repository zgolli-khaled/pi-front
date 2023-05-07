import { Component, OnInit } from '@angular/core';
import { TokenStorageService } from 'src/app/_services/token-storage.service';

@Component({
  selector: 'app-doctors-table',
  templateUrl: './doctors-table.component.html',
  styleUrls: ['./doctors-table.component.css']
})
export class DoctorsTableComponent implements OnInit {

  roles: string[] = [];
  isLoggedIn = false;
  constructor(private tokenStorage: TokenStorageService) { }

  ngOnInit(): void {
    this.loadJsFile("assets/back/vendor/jquery/jquery.min.js");
    this.loadJsFile("assets/back/vendor/bootstrap/js/bootstrap.bundle.min.js");

    this.loadJsFile("assets/back/vendor/jquery-easing/jquery.easing.min.js");



  
    this.loadJsFile("assets/back/js/sb-admin-2.min.js");
    this.loadJsFile("/assets/back/js/demo/datatables-demo.js");

   


   
    if (this.tokenStorage.getToken()) {
      this.isLoggedIn = true;
      this.roles = this.tokenStorage.getUser().roles;
      
    }
    

    

    
    
  }
  logout(): void {
    this.tokenStorage.signOut();
    window.location.reload();
  }

  public loadJsFile(url : string) {  
    let node = document.createElement('script');  
    node.src = url;  
    node.type = 'text/javascript';  
    document.getElementsByTagName('head')[0].appendChild(node);  
  }   

}
