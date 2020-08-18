import { async, ComponentFixture, TestBed } from '@angular/core/testing';

import { LeasingAgentFormComponent } from './leasing-agent-form.component';

describe('LeasingAgentFormComponent', () => {
  let component: LeasingAgentFormComponent;
  let fixture: ComponentFixture<LeasingAgentFormComponent>;

  beforeEach(async(() => {
    TestBed.configureTestingModule({
      declarations: [ LeasingAgentFormComponent ]
    })
    .compileComponents();
  }));

  beforeEach(() => {
    fixture = TestBed.createComponent(LeasingAgentFormComponent);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
