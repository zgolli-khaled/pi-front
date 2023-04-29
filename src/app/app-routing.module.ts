import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { DashboardComponent } from './backOffice/dashboard/dashboard.component';
import { LoginComponent } from './login/login/login.component';
import { ForgotPasswordComponent } from './login/forgot-password/forgot-password.component';
import { RegisterComponent } from './login/register/register.component';
import { DoctorsTableComponent } from './backOffice/doctors-table/doctors-table.component';
import {  PrescriptionComponent } from './backOffice/prescription/prescription.component'
import {ReclamationComponent} from "./backOffice/reclamation/reclamation.component";
import {DisplayReclamComponent} from "./backOffice/display-reclam/display-reclam.component";
import {RecDialogComponent} from "./backOffice/rec-dialog/rec-dialog.component";

const routes: Routes = [
  {
    path: '', component: DashboardComponent , children :[
      {
          path: 'NewPrescription', component: PrescriptionComponent} ,
         {path: 'reclamation', component: ReclamationComponent , children :[
            { path: 'RecDialogComponent', component: RecDialogComponent}
           ]
         },
      {path: 'displayreclam', component: DisplayReclamComponent}
]

  },

  {
    path: 'login', component: LoginComponent
  },
  {
    path: 'forgotPassword', component: ForgotPasswordComponent
  },
  {
    path: 'register', component: RegisterComponent
  },

  {
    path: '',redirectTo : 'login',pathMatch:'full'
  },
  {
    path: 'docTable', component: DoctorsTableComponent
  },



];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
