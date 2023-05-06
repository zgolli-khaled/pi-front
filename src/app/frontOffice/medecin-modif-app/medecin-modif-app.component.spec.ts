import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MedecinModifAppComponent } from './medecin-modif-app.component';

describe('MedecinModifAppComponent', () => {
  let component: MedecinModifAppComponent;
  let fixture: ComponentFixture<MedecinModifAppComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ MedecinModifAppComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(MedecinModifAppComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
