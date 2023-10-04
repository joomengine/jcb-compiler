```
██████╗  ██████╗ ██╗    ██╗███████╗██████╗
██╔══██╗██╔═══██╗██║    ██║██╔════╝██╔══██╗
██████╔╝██║   ██║██║ █╗ ██║█████╗  ██████╔╝
██╔═══╝ ██║   ██║██║███╗██║██╔══╝  ██╔══██╗
██║     ╚██████╔╝╚███╔███╔╝███████╗██║  ██║
╚═╝      ╚═════╝  ╚══╝╚══╝ ╚══════╝╚═╝  ╚═╝
```
# final class ServiceProvider (Details)
> namespace: **VDM\Joomla\Componentbuilder\Power\Generator**
```uml
@startuml
class ServiceProvider << (F,LightGreen) >> #RoyalBlue {
  # string $version
  # array $registerlines
  # array $getfunctions
  + getCode() : ?string
  + setVersion(string $version) : void
  + setRegisterLine(string $className, string $functionName, ...) : void
  + setGetFunction(string $className, string $functionName, ...) : void
  # getAlias(string $className, string $alias) : string
  # getShare(string $functionName, string $alias) : string
  # getDependencies(string $className, ?array $dependencies = null) : string
}

note right of ServiceProvider::getCode
  Get the generated class code

  since: 3.2.0
  return: ?string
end note

note right of ServiceProvider::setVersion
  Set the class since version

  since: 3.2.0
  return: void
end note

note right of ServiceProvider::setRegisterLine
  Set the class alias and share code for the service provider register.

  since: 3.2.0
  return: void
  
  arguments:
    string $className
    string $functionName
    string $alias
end note

note right of ServiceProvider::setGetFunction
  Set the class get function for the service provider.

  since: 3.2.0
  return: void
  
  arguments:
    string $className
    string $functionName
    string $description
    ?array $dependencies = null
end note

note right of ServiceProvider::getAlias
  Generates the class alias for the service provider.

  since: 3.2.0
  return: string
end note

note right of ServiceProvider::getShare
  Generates the class share for the service provider.

  since: 3.2.0
  return: string
end note

note right of ServiceProvider::getDependencies
  Generates the class dependencies.

  since: 3.2.0
  return: string
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

