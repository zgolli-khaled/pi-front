import { NgModule } from '@angular/core';
import { RouterModule, Routes } from '@angular/router';
import { DashboardComponent } from './backOffice/dashboard/dashboard.component';
import { LoginComponent } from './login/login/login.component';
import { ForgotPasswordComponent } from './login/forgot-password/forgot-password.component';
import { RegisterComponent } from './login/register/register.component';
import { NotFoundComponent } from './not-found/not-found.component';
import { DoctorsTableComponent } from './backOffice/doctors-table/doctors-table.component';

const routes: Routes = [
  {
    path: "dashboard", component: DashboardComponent
  },
  {
    path: "login", component: LoginComponent
  },
  {
    path: "forgotPassword", component: ForgotPasswordComponent
  },
  {
    path: "register", component: RegisterComponent
  },
  {
    path: '',redirectTo : 'login',pathMatch:'full'
  },
  {
    path: "docTable", component: DoctorsTableComponent
  },{
    path: '**',component: NotFoundComponent
  },
];

@NgModule({
  imports: [RouterModule.forRoot(routes)],
  exports: [RouterModule]
})
export class AppRoutingModule { }
