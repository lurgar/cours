import { Component, OnInit, Input } from '@angular/core';

@Component({
  selector: 'app-post',
  templateUrl: './post.component.html',
  styleUrls: ['./post.component.css']
})

export class PostComponent implements OnInit {

  @Input() title: string;
  @Input() content: string;
  comments = "";
  onlike = true;
  notlike = false;

  constructor() { }

  ngOnInit() {

  }

  onLike() {
    if (this.onlike === true) {
      this.onlike = false;
      this.notlike = true;
    } else {
      this.onlike = true;
      this.notlike = false;
    }
  }


}
