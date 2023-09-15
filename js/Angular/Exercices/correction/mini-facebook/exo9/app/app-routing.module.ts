import { NgModule } from '@angular/core';
import { Routes, RouterModule } from '@angular/router';
import { ListComponent } from './list/list.component';
import { AjouterComponent } from './ajouter/ajouter.component';

const routes: Routes = [
  { path: "", component: ListComponent },
  { path: "ajouter", component: AjouterComponent },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
