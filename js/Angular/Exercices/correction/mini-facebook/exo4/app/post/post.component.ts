import { Component, OnInit } from '@angular/core';

@Component({
  selector: 'app-post',
  templateUrl: './post.component.html',
  styleUrls: ['./post.component.css']
})

export class PostComponent implements OnInit {

  title : string = "Titre"
  content : string = "Contenu"
  like : string = "J'aime !"

  onLike() {
    document.getElementById("like").style.display = "none";
    document.getElementById("nolike").style.display = "inline-block";
  }
  onNotLike() {
    document.getElementById("like").style.display = "inline-block";
    document.getElementById("nolike").style.display = "none";
  }

  constructor() { }

  ngOnInit() {

  }

}
