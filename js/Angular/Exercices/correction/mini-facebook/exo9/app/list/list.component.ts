import { Component, OnInit } from '@angular/core';
import { DataService } from '../data.service';

@Component({
  selector: 'app-list',
  templateUrl: './list.component.html',
  styleUrls: ['./list.component.css']
})
export class ListComponent implements OnInit {

  title = 'mini-facebook';
  post;

  constructor(private dataService: DataService) { }

  ngOnInit() {
    this.post = this.dataService.post;
  }
}
