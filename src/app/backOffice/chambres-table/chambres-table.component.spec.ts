import { ComponentFixture, TestBed } from '@angular/core/testing';

import { ChambresTableComponent } from './chambres-table.component';

describe('ChambresTableComponent', () => {
  let component: ChambresTableComponent;
  let fixture: ComponentFixture<ChambresTableComponent>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ ChambresTableComponent ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(ChambresTableComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
