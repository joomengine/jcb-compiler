```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# class Counter (Details)
> namespace: **VDM\Joomla\Componentbuilder\Compiler\Utilities**
```uml
@startuml
class Counter  #Gold {
  + int $folder
  + int $file
  + int $page
  + int $line
  + int $field
  + int $accessSize
  # int $seconds
  # float $actualSeconds
  # int $folderSeconds
  # int $fileSeconds
  # int $lineSeconds
  # float $secondsDebugging
  # float $secondsPlanning
  # float $secondsMapping
  # float $secondsOffice
  # int $totalHours
  # int $debuggingHours
  # int $planningHours
  # int $mappingHours
  # int $officeHours
  # int $actualTotalHours
  # int $actualHoursSpent
  # int $actualDaysSpent
  # int $totalDays
  # int $actualTotalDays
  # float $projectWeekTime
  # float $projectMonthTime
  # float $start
  # float $end
  # float $timer
  # Content $content
  + __construct(?Content $content = null)
  + start() : void
  + end() : void
  + set() : void
  # calculate() : void
}

note right of Counter::__construct
  Constructor

  since: 3.2.0
end note

note right of Counter::start
  Start the timer

  since: 3.2.0
  return: void
end note

note right of Counter::end
  End the timer

  since: 3.2.0
  return: void
end note

note right of Counter::set
  Set all the time values

  since: 3.2.0
  return: void
end note

note right of Counter::calculate
  Calculate all the time values

  since: 3.2.0
  return: void
end note
 
@enduml
```

---
```
     ██╗ ██████╗██████╗
     ██║██╔════╝██╔══██╗
     ██║██║     ██████╔╝
██   ██║██║     ██╔══██╗
╚█████╔╝╚██████╗██████╔╝
 ╚════╝  ╚═════╝╚═════╝
```
> Build with [Joomla Component Builder](https://git.vdm.dev/joomla/Component-Builder)

