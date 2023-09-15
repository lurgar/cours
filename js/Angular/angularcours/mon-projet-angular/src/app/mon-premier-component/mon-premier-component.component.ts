import { Component, Input, OnInit } from '@angular/core';
import { from } from 'rxjs';

@Component({
  selector: 'app-mon-premier-component',
  templateUrl: './mon-premier-component.component.html',
  styleUrls: ['./mon-premier-component.component.css']
})
export class MonPremierComponentComponent implements OnInit {

    /*@Input() persoName: string;

    @Input() persoStatus: string;*/
    persoName:string = "Emmanuelle"
    persoStatus: string ="présent"

    constructor() {

    }

    ngOnInit() {

    }

    getStatus() {
      return this.persoStatus;
    }

    getColor() {
      if (this.persoStatus === "Présent") {
        return "green";
      } else if (this.persoStatus === "Absent") {
        return "red";
      } else {
        return "grey"
      }
    }
}


