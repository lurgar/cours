import { Component, OnInit } from '@angular/core';
import {DataService} from './data.service';

@Component({
  selector: 'app-root',
  templateUrl: './app.component.html',
  styleUrls: ['./app.component.css']
})
export class AppComponent implements OnInit {

    constructor() {}
     ngOnInit() {}
}

  /*isAuth = true;
  presenceTab:any[];

  constructor(private data :DataService) {

  }

  ngOnInit() {
this.presenceTab=this.data.presenceTabService;
  }

  onClique() {
    alert('cliqué !');
  }

}*/
