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
    HomePageComponent
  ],
  imports: [
    BrowserModule,
    AppRoutingModule
  ],
  providers: [],
  bootstrap: [AppComponent]
})
export class AppModule { }
