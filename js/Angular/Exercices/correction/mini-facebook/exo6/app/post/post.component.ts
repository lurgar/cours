import { Component, Input, OnInit } from '@angular/core';

@Component({
  selector: 'app-post',
  templateUrl: './post.component.html',
  styleUrls: ['./post.component.css']
})

export class PostComponent implements OnInit {
  @Input() title : string;
  @Input() content : string;

  onLike() {
    document.getElementById("like").style.display = "none";
    document.getElementById("nolike").style.display = "block";
  }
  onNotLike() {
    document.getElementById("like").style.display = "block";
    document.getElementById("nolike").style.display = "none";
  }

  constructor() { }

  ngOnInit() {

  }

}
