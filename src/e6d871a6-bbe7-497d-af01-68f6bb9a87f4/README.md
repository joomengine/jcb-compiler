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
  + __construct(Content $content)
  + start() : void
  + end() : void
  + set() : void
  # calculate() : void
}

note right of Counter::__construct
  Constructor.

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

The Power feature in JCB allows you to write PHP classes and their implementations, making it easy to include them in your Joomla project. JCB handles linking, autoloading, namespacing, and folder structure creation for you.

By using the SPK (Super Power Key) in your custom code (replacing the class name in your code with the SPK), JCB will automatically pull the power from the repository into your project. This makes it available in your JCB instance, allowing you to edit it and include the class in your generated Joomla component.

JCB uses placeholders like [[[`NamespacePrefix`]]] and [[[`ComponentNamespace`]]] in namespacing to prevent collisions and improve reusability across different JCB systems. You can also set the **JCB powers path** globally or per component under the **Dynamic Integration** tab, providing flexibility and easy maintainability.

To add this specific Power to your project in JCB:

> simply use this SPK
```
Super---e6d871a6_bbe7_497d_af01_68f6bb9a87f4---Power
```
> remember to replace the `---` with `___` to activate this Power in your code

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

