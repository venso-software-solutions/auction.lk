import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { LeasingAgentComponent } from './leasing-agent.component';

describe('LeasingAgentComponent', () => {
  let component: LeasingAgentComponent;
  let fixture: ComponentFixture<LeasingAgentComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ LeasingAgentComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(LeasingAgentComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
