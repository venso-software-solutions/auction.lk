import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { PromoteAddComponent } from './promote-add.component';

describe('PromoteAddComponent', () => {
  let component: PromoteAddComponent;
  let fixture: ComponentFixture<PromoteAddComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ PromoteAddComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(PromoteAddComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
