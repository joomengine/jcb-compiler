```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class ClassInjectorBuilder (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power\Generator**
> extends: ****
```uml
@startuml
class ClassInjectorBuilder << (F,LightGreen) >> #RoyalBlue {
  # Search $search
  # ClassInjector $classinjector
  + __construct(Search $search, ClassInjector $classinjector)
  + getCode(array $power) : ?string
  - valid(string $guid) : bool
  - getName(string $guid, string $as = 'default') : ?string
  - getDescription(string $guid) : ?string
  - getDependencyInjectionCode() : ?string
  - setVersion(string $version) : void
  - setProperty(string $name, string $description) : void
  - setComment(string $name, string $description) : void
  - setArgument(string $name) : void
  - setAssignment(string $name) : void
  - extractSinceVersion(string $inputString) : ?string
}

note right of ClassInjectorBuilder::__construct
  Constructor.

  since: 3.2.0
end note

note left of ClassInjectorBuilder::getCode
  Get the injection code.

  since: 3.2.0
  return: ?string
end note

note right of ClassInjectorBuilder::valid
  Check that this is a valid injection class.

  since: 3.2.0
  return: bool
end note

note left of ClassInjectorBuilder::getName
  Get the class name.

  since: 3.2.0
  return: ?string
end note

note right of ClassInjectorBuilder::getDescription
  Get the class description.

  since: 3.2.0
  return: ?string
end note

note left of ClassInjectorBuilder::getDependencyInjectionCode
  Get the dependency injection code.

  since: 3.2.0
  return: ?string
end note

note right of ClassInjectorBuilder::setVersion
  Set the class since version.

  since: 3.2.0
  return: void
end note

note left of ClassInjectorBuilder::setProperty
  Set the class property.

  since: 3.2.0
  return: void
end note

note right of ClassInjectorBuilder::setComment
  Set the class comment for the constructor parameter.

  since: 3.2.0
  return: void
end note

note left of ClassInjectorBuilder::setArgument
  Set the class constructor argument.

  since: 3.2.0
  return: void
end note

note right of ClassInjectorBuilder::setAssignment
  Get the assignment code inside the constructor.

  since: 3.2.0
  return: void
end note

note left of ClassInjectorBuilder::extractSinceVersion
  Extract the '@since' version number from a given string.
This function checks the provided string for a '@since' annotation
and retrieves the subsequent version number. If no '@since'
annotation is found or no version number is provided after the
annotation, the function will return null.

  since: 3.2.0
  return: ?string
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

