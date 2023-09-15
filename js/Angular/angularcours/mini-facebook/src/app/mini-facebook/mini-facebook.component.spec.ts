import { ComponentFixture, TestBed } from '@angular/core/testing';

import { MiniFacebookComponent } from './mini-facebook.component';

describe('MiniFacebookComponent', () => {
  let component: MiniFacebookComponent;
  let fixture: ComponentFixture<MiniFacebookComponent>;

  beforeEach(() => {
    TestBed.configureTestingModule({
      declarations: [MiniFacebookComponent]
    });
    fixture = TestBed.createComponent(MiniFacebookComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
