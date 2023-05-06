import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MedecinAppComponent } from './medecin-app.component';

describe('MedecinAppComponent', () => {
  let component: MedecinAppComponent;
  let fixture: ComponentFixture<MedecinAppComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ MedecinAppComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(MedecinAppComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
