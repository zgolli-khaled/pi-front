import { Component, OnInit, ViewChild, ElementRef } from '@angular/core';
import { HttpClient, HttpHeaders } from '@angular/common/http';
import { ActivatedRoute } from '@angular/router';

@Component({
  selector: 'app-discussion',
  templateUrl: './discussion.component.html',
  styleUrls: ['./discussion.component.css']
})
export class DiscussionComponent implements OnInit {

  @ViewChild('messageContainer') messageContainer!: ElementRef;

  messages: any[] = [];
  newMessage: string = "";
  id: string = "0";

  constructor(private http: HttpClient, private route: ActivatedRoute) { }

  ngOnInit() {
    this.id = this.route.snapshot.params['id'];
    this.getMessages();
  }

  getMessages() {
    this.http.get<any[]>('http://localhost:8098/Discussion/getAll/' + this.id).subscribe(data => {
      this.messages = data;
      console.log(this.messages)
      setTimeout(() => {
        this.messageContainer.nativeElement.scrollTop = this.messageContainer.nativeElement.scrollHeight;
      }, 0);
    });

  }

  postMessage() {
    const data = { msg: this.newMessage };
    const options = { headers: new HttpHeaders({ 'Content-Type': 'application/json' }) };
    console.log(this.id);
    this.http.post<any>('http://localhost:8098/Discussion/add/' + this.id + '/1', data, options).subscribe(data => {
      this.getMessages();
      console.log(this.newMessage);
      this.newMessage = '';
    });
  }
}
