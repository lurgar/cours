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

  constructor() { }

  ngOnInit() {

  }

}
