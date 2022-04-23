### Task
We are tracking down our rogue agent and she travels from place to place to avoid being tracked. Each of her travels are based on a list of itineraries in an unusual or incorrect order. The task is to determine the complete route she will take.

You are given an array of `routes` containing her travel itineraries. Convert this into a complete, in-order list of the places she will travel.

### Specification

### findRoutes(routes)

### Parameters
 - routes: Array<Array<String>> - Array of itineraries
### Return Value
 - String - An ordered list or destinations
### Constraints
 - All inputs have at least one valid, complete route
### Examples
#### routes                                                     #### Return Value
```
[["USA","BRA"],["JPN","PHL"],["BRA","UAE"],["UAE","JPN"]]       "USA, BRA, UAE, JPN, PHL"
```