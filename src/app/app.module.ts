import { NgModule } from '@angular/core';
import { BrowserModule } from '@angular/platform-browser';

import { AppRoutingModule } from './app-routing.module';
import { AppComponent } from './app.component';
import { DashboardComponent } from './backOffice/dashboard/dashboard.component';
import { LoginComponent } from './login/login/login.component';
import { RegisterComponent } from './login/register/register.component';
import { ForgotPasswordComponent } from './login/forgot-password/forgot-password.component';
import { NotFoundComponent } from './not-found/not-found.component';
import { DoctorsTableComponent } from './backOffice/doctors-table/doctors-table.component';
import { NavBarComponent } from './nav-bar/nav-bar.component';
import { HomePageComponent } from './frontOffice/home-page/home-page.component';

import { HttpClientModule } from '@angular/common/http';
import { FormsModule } from '@angular/forms';
import { AddAppointmentComponent } from './backOffice/add-appointment/add-appointment.component';
import { ChambresTableComponent } from './backOffice/chambres-table/chambres-table.component';
import { AddChambreComponent } from './backOffice/add-chambre/add-chambre.component';
import { ChambreComponent } from './frontOffice/chambre/chambre.component';


@NgModule({
  declarations: [
    AppComponent,
    DashboardComponent,
    LoginComponent,
    RegisterComponent,
    ForgotPasswordComponent,
    NotFoundComponent,
    DoctorsTableComponent,
    NavBarComponent,
    HomePageComponent,
    AddAppointmentComponent,
    ChambresTableComponent,
    AddChambreComponent,
    ChambreComponent
    
  ],
  imports: [
    BrowserModule,
    AppRoutingModule,
    HttpClientModule,
    FormsModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
