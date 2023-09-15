import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { MonPremierComponentComponent } from './mon-premier-component/mon-premier-component.component';
import { FormsModule } from '@angular/forms';
import { DataService } from './data.service';
import { EleveDetailComponentComponent } from './eleve-detail-component/eleve-detail-component.component';

@NgModule({
  declarations: [
    AppComponent,
    MonPremierComponentComponent,
    EleveDetailComponentComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    FormsModule
  ],
  providers: [
    DataService
  ],
  bootstrap: [AppComponent]
})
export class AppModule { }
