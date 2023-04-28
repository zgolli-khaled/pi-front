import { ComponentFixture, TestBed } from '@angular/core/testing';

import { DisplayReclamationComponent } from './display-reclamation.component';

describe('DisplayReclamationComponent', () => {
  let component: DisplayReclamationComponent;
  let fixture: ComponentFixture<DisplayReclamationComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ DisplayReclamationComponent ]
    })
    .compileComponents();

    fixture = TestBed.createComponent(DisplayReclamationComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
