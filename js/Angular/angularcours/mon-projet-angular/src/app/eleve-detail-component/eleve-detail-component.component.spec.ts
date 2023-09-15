import { ComponentFixture, TestBed } from '@angular/core/testing';

import { EleveDetailComponentComponent } from './eleve-detail-component.component';

describe('EleveDetailComponentComponent', () => {
  let component: EleveDetailComponentComponent;
  let fixture: ComponentFixture<EleveDetailComponentComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [EleveDetailComponentComponent]
    });
    fixture = TestBed.createComponent(EleveDetailComponentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
